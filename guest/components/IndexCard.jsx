import { Link } from "react-router-dom";

export default function IndexCard({ data }) {
  const {
    autore,
    data_inizio,
    descrizione,
    genres,
    numero_volumi,
    status,
    titolo,
    url_copertina,
    valutazione,
  } = data;

  const maxStars = 10;

  return (
    <div className="inset-shadow-sm/90 inset-shadow-black/100 rounded-lg p-5 bg-indigo-900 h-full flex flex-col justify-between">
      <img
        src={url_copertina}
        alt="immagine copertina"
        className="w-full object-cover h-auto md:h-110 lg:h-156 xl:h-130 2xl:h-114 rounded-lg border-4 border-solid mb-5"
      />
      <h2 className=" text-3xl xl:text-4xl/relaxed mb-5 whitespace-nowrap overflow-hidden text-ellipsis font-bold">
        {titolo}
      </h2>
      <h6 className="text-sm mb-3">
        {valutazione}
        {[...Array(maxStars)].map((_, index) =>
          index < valutazione ? (
            <i key={index} className="fa-solid fa-star"></i>
          ) : (
            <i key={index} className="fa-regular fa-star"></i>
          )
        )}
      </h6>
      <div className=" text-2xl xl:text-3xl">
        <h6 className="whitespace-nowrap overflow-hidden text-ellipsis">
          {autore}
        </h6>
        <h6>volumi: {numero_volumi}</h6>

        {/* [...Array(maxStar)].map((_, index) => index < data ? <i key={index} className="fa-solid fa-star text-success"></i> : <i key={index} className="fa-regular fa-star text-success"></i>)} */}

        <div className="grid grid-cols-3 my-4 gap-3 text-center">
          {genres.length
            ? genres.map((genre) => (
                <div
                  key={genre.id}
                  className="text-sm bg-lime-400  rounded-xl text-indigo-800 font-bold h-6"
                >
                  {genre.genere}
                </div>
              ))
            : ""}
        </div>
      </div>
      <div className="text-center mx-auto pt-5 text-2xl xl:text-3xl">
        <Link
          to={`/${titolo}`}
          state={data}
          className="bg-indigo-500 rounded-xl px-5 py-1 font-bold"
        >
          dettagli
        </Link>
      </div>
    </div>
  );
}
