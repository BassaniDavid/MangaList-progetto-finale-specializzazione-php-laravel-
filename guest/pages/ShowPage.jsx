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
    <div>
      <img src={url_copertina} alt="immagine copertina" />
      <h4>{titolo}</h4>
      <h6>{autore}</h6>
      <h6>{status}</h6>
      <h6>{numero_volumi}</h6>
      <h6>{data_inizio}</h6>
      <h6>{valutazione}</h6>
      <h6>{descrizione}</h6>
      <h6>{descrizione}</h6>
      <div>
        {genres.length
          ? genres.map((genre) => <div key={genre.id}>{genre.genere}</div>)
          : ""}
      </div>
    </div>
  );
}
