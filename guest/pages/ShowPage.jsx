import axios from "axios";
import { useEffect, useState } from "react";
import { useParams } from "react-router-dom";
import { useLocation } from "react-router-dom";
import { useNavigate } from "react-router-dom";

export default function ShowPage() {
  const location = useLocation();
  const data = location.state;
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
    <div className="container mx-auto px-10">
      <div className="inset-shadow-sm/90 inset-shadow-black/100 rounded-lg p-5 bg-indigo-900 h-full grid grid-cols-1 lg:grid-cols-3 lg:gap-5">
        <img
          src={url_copertina}
          alt="immagine copertina"
          className="rounded-lg border-4 border-solid w-full mx-auto"
        />
        <div className="col-span-2">
          <div className="md:flex mb-5 justify-between text-3xl xl:text-4xl/relaxed font-bold">
            <h2 className="whitespace-nowrap overflow-hidden text-ellipsis my-3 md:my-0">
              {titolo}
            </h2>
            <h6 className="text-xl">
              {valutazione}
              {[...Array(maxStars)].map((_, index) =>
                index < valutazione ? (
                  <i key={index} className="fa-solid fa-star"></i>
                ) : (
                  <i key={index} className="fa-regular fa-star"></i>
                )
              )}
            </h6>
          </div>
          <div className=" text-2xl xl:text-3xl">
            <h6 className="whitespace-nowrap overflow-hidden text-ellipsis  mb-5">
              autore: {autore}
            </h6>
            <h6 className=" mb-3">volumi: {numero_volumi}</h6>

            <div className=" mb-3 grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-5 text-center text-sm">
              {genres.length
                ? genres.map((genre) => (
                    <div
                      key={genre.id}
                      className=" bg-lime-400  rounded-xl text-indigo-800 font-bold py-0"
                    >
                      {genre.genere}
                    </div>
                  ))
                : ""}
            </div>
          </div>
          <h6 className=" mb-3">stato: {status}</h6>
          <h6 className=" mb-3">in uscita dal: {data_inizio}</h6>
          <h6 className=" mb-3">trama: {descrizione}</h6>
          <button
            onClick={() => window.history.back()}
            className="bg-indigo-500 rounded-xl px-5 py-2 font-bold"
          >
            torna indietro
          </button>
        </div>
      </div>
    </div>
  );
}
