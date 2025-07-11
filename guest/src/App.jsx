// importo destrutturando i componenti per le rotte da react-router-dom (dopo aver installato il pacchetto)
import { BrowserRouter, Route, Routes } from "react-router-dom";

import { useState } from "react";
import "./App.css";

// importo le pagine
import ShowPage from "../pages/ShowPage";
import DefaultLayout from "../layouts/DefaultLayouts";
import IndexPage from "../pages/IndexPage";

function App() {
  const [count, setCount] = useState(0);

  return (
    <BrowserRouter>
      <Routes>
        {/* tutte le rotte passerando prima dal layout */}
        <Route element={<DefaultLayout />}>
          <Route path="/" element={<IndexPage />} />
          <Route path="/" element={<IndexPage />} />
        </Route>
      </Routes>
    </BrowserRouter>
  );
}

export default App;
