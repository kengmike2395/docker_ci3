import { staticdata} from "./staticdata.js";

const featuresBlock = document.querySelector(".features__block");
const learningMethodsBlock = document.querySelector(".learning-methods__block");
const testimonialsBlock = document.querySelector(".testimonials__block");


featuresBlock.innerHTML = staticdata.getFeaturesDisplay().join("");
learningMethodsBlock.innerHTML = staticdata.getLearningMethodsDisplay().join("");
testimonialsBlock.innerHTML = staticdata.getTestimonialsDisplay().join("");
