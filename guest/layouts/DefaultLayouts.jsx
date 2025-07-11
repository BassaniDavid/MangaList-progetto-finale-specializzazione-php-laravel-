// importo destrutturando il componente Outlet da react-router-dom (dopo aver installato il pacchetto)
import { Outlet } from "react-router-dom";

// importo header e footer
import Footer from "../components/footer";
import Header from "../components/header";

const DefaultLayout = () => {
  return (
    <>
      <Header />
      <Outlet />
      <Footer />
    </>
  );
};

export default DefaultLayout;
