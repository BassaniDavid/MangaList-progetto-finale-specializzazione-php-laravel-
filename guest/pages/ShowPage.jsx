import axios from "axios";
import { useEffect, useState } from "react";
import { useParams } from "react-router-dom";
import { useLocation } from "react-router-dom";

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

  return (
    <div className="container mx-auto px-10">
      <div className="inset-shadow-sm/90 inset-shadow-black/100 rounded-lg p-5 bg-indigo-900 h-full grid grid-cols-2 gap-5">
        <img
          src={url_copertina}
          alt="immagine copertina"
          className="object-cover rounded-lg border-4 border-solid mr-5 "
        />
        <div>
          <div className="flex justify-between text-3xl xl:text-4xl/relaxed mb-5 font-bold">
            <h2 className="whitespace-nowrap overflow-hidden text-ellipsis">
              {titolo}
            </h2>
            <h6>{valutazione}</h6>
          </div>
          <div className=" text-2xl xl:text-3xl">
            <h6 className="whitespace-nowrap overflow-hidden text-ellipsis">
              autore: {autore}
            </h6>
            <h6>volumi: {numero_volumi}</h6>

            <div>
              {genres.length
                ? genres.map((genre) => (
                    <div key={genre.id}>{genre.genere}</div>
                  ))
                : ""}
            </div>
          </div>
          <h6>stato: {status}</h6>
          <h6>in uscita dal: {data_inizio}</h6>
          <h6>trama: {descrizione}</h6>
        </div>
      </div>
    </div>
  );
}
