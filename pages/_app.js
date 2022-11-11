import '../styles/globals.css'
import Header from "./components/header";
import Footer from "./components/footer";

function MyApp({Component, pageProps}) {
    return (
        <div>
            <Header/>
            <link rel="preconnect" href="https://fonts.googleapis.com"/>
            <link rel="preconnect" href="https://fonts.gstatic.com" crossOrigin/>
            <link
                href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
                rel="stylesheet"/>
            <Component {...pageProps} />
            <Footer/>
        </div>
    );
}

export default MyApp
