import "./bootstrap";
import "./jsvectormap.min.js";
import "./jsvectormap.min.js.js";
import "./alpine.js";
import "./slider.js";
import "../css/app.css";
import "../css/jsvectormap.min.css";
import "../css/tailwind.css";

import.meta.glob(["../image/**"]);

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();
