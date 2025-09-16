const preguntas = document.querySelectorAll(".faq-pregunta");

preguntas.forEach((pregunta) => {
    pregunta.addEventListener("click", () => {
    const item = pregunta.parentElement;

    // cierra todos los items
    document.querySelectorAll(".faq-item").forEach((i) => {
        if (i !== item) {
        i.classList.remove("active");
        }
    });

    item.classList.toggle("active"); //cambia de item
    });
});