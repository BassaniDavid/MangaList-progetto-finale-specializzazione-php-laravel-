import { useEffect, useState } from "react";
import axios from "axios";

import IndexCard from "../components/IndexCard";

const IndexPage = () => {
  // variabile di stato
  const [mangas, setMangas] = useState([]);
  const [genres, setGenres] = useState([]);
  const [showGenres, setShowGenres] = useState(false);
  const [search, setSearch] = useState({
    titolo: "",
    autore: "",
    valutazione_min: 0,
    genere_id: [],
    status: "",
  });

  function getMangas() {
    console.log("Valori di ricerca:", search);
    axios
      .get("http://127.0.0.1:8000/api/manga", {
        params: search,
      })
      .then((response) => {
        console.log(response.data.data);
        setMangas(response.data.data);
      })
      .catch((err) => console.log(err));
  }

  function getGenres() {
    axios
      .get("http://127.0.0.1:8000/api/generi")
      .then((response) => {
        console.log(response.data.data);
        setGenres(response.data.data);
      })
      .catch((err) => console.log(err));
  }

  function handleReset() {
    const resetValues = {
      titolo: "",
      autore: "",
      valutazione_min: 0,
      genere_id: [],
      status: "",
    };
    setSearch(resetValues);
    getMangas(resetValues); // subito con i valori vuoti
  }

  // Ricerca istantanea
  useEffect(() => {
    getMangas(search);
  }, [search]);

  useEffect(() => {
    getGenres();
  }, []);

  return (
    <div className="container mx-auto px-10">
      {/* form per ricerca */}
      <div className="inset-shadow-sm/90 inset-shadow-black/100 rounded-lg p-5 bg-indigo-900 flex flex-col md:grid gap-10 text-xl lg:text-2xl">
        <div className="flex flex-col">
          <label htmlFor="titolo">Titolo</label>
          <input
            type="text"
            name="titolo"
            id="titolo"
            placeholder="Inserisci il titolo"
            value={search.titolo}
            onChange={(e) => setSearch({ ...search, titolo: e.target.value })}
          />
        </div>

        <div className="flex flex-col">
          <label htmlFor="autore">Autore</label>
          <input
            type="text"
            name="autore"
            id="autore"
            placeholder="Inserisci l'autore"
            value={search.autore}
            onChange={(e) => setSearch({ ...search, autore: e.target.value })}
          />
        </div>
        <div>
          <label htmlFor="valutazione_min" className="mr-5">
            Valutazione minima:
          </label>
          <input
            type="number"
            min="0"
            max="9.9"
            step="0.1"
            name="valutazione_min"
            id="valutazione_min"
            value={search.valutazione_min}
            onChange={(e) =>
              setSearch({
                ...search,
                valutazione_min: e.target.value,
              })
            }
          />
        </div>

        <div>
          <label htmlFor="status">status: </label>
          <select
            name="status"
            id="status"
            value={search.status}
            onChange={(e) => setSearch({ ...search, status: e.target.value })}
            className="bg-indigo-950 rounded-sm px-2"
          >
            <option value="">Tutti</option>
            <option value="completato">Completato</option>
            <option value="in corso">In corso</option>
          </select>
        </div>
        <div className="md:col-span-2">
          <button
            type="button"
            onClick={() => setShowGenres(!showGenres)}
            className="bg-lime-400  rounded-full text-indigo-800 font-bold py-1 px-5"
          >
            {showGenres ? "Nascondi generi" : "Filtra per genere"}
          </button>

          {showGenres && (
            <div className="inset-shadow-sm/90 inset-shadow-black/100 rounded-lg p-5 bg-indigo-700 md:grid md:grid-cols-3 gap-10 m-5">
              {genres.map((genere) => (
                <div key={genere.id}>
                  <label>
                    <input
                      type="checkbox"
                      value={genere.id}
                      checked={search.genere_id.includes(String(genere.id))}
                      onChange={(e) => {
                        const checked = e.target.checked;
                        const id = e.target.value;
                        setSearch((prevSearch) => {
                          const selected = new Set(
                            prevSearch.genere_id.map(String)
                          );
                          if (checked) {
                            selected.add(id);
                          } else {
                            selected.delete(id);
                          }
                          return {
                            ...prevSearch,
                            genere_id: Array.from(selected),
                          };
                        });
                      }}
                    />
                    <span className="ml-1">{genere.genere}</span>
                  </label>
                </div>
              ))}
            </div>
          )}
        </div>
        <div className="col-span-2">
          <button
            type="button"
            onClick={handleReset}
            className="bg-lime-400  rounded-full text-indigo-800 font-bold py-1 px-5"
          >
            Reset
          </button>
        </div>
      </div>
      <div className="inset-shadow-sm/90 inset-shadow-black/100 rounded-lg p-5 bg-indigo-900 flex flex-col justify-between my-10 text-2xl">
        {mangas.length > 0
          ? "totale manga trovati: " + mangas.length
          : "purtroppo non abbiamo trovato nessun manga che corrisponda alla tua ricerca"}
      </div>
      <section className="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-10">
        {mangas.map((manga) => (
          <div key={manga.id}>
            <IndexCard data={manga} />
          </div>
        ))}
      </section>
    </div>
  );
};

export default IndexPage;
