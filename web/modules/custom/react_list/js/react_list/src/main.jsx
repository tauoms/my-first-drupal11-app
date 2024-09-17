import React from "react";
import ReactDOM from "react-dom/client";
import App from "./App.jsx";
import { StrictMode } from "react";

const root = ReactDOM.createRoot(document.getElementById("react-app"));
root.render(<App />);

// ReactDOM.createRoot(document.getElementById("react-app")).render(
//   <React.StrictMode>
//     <App />
//   </React.StrictMode>
// );
