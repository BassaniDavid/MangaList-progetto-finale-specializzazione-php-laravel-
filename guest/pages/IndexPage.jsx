import { useEffect, useState } from "react";
import axios from "axios";

import IndexCard from "../components/IndexCard";

const IndexPage = () => {
  // variabile di stato
  const [mangas, setMangas] = useState([]);
  const [search, setSearch] = useState("");

  function getMangas() {
    axios
      .get("http://127.0.0.1:8000/api/manga", {
        params: {
          search,
        },
      })
      .then((response) => {
        console.log(response.data.data);
        setMangas(response.data.data);
      })
      .catch((err) => console.log(err));
  }

  useEffect(getMangas, []);

  return (
    <div className="container mx-auto px-10">
      <section className="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-10">
        {mangas.length ? (
          mangas.map((manga) => (
            <div key={manga.id}>
              <IndexCard data={manga} />
            </div>
          ))
        ) : (
          <div>nessun manga trovato </div>
        )}
      </section>
    </div>
  );
};

export default IndexPage;
