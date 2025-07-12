// importo destrutturando il componente Outlet da react-router-dom (dopo aver installato il pacchetto)
import { Outlet } from "react-router-dom";

// importo header e footer
import Footer from "../components/footer";
import Header from "../components/header";

const DefaultLayout = () => {
  return (
    <div className="bg-indigo-950 text-lime-400">
      <Header />
      <Outlet />
      <Footer />
    </div>
  );
};

export default DefaultLayout;
