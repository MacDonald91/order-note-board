async function loadNotes() {
    const response = await fetch("/api/notes");

    const notes = await response.json();

    const notesDiv = document.getElementById("notes");

    notesDiv.innerHTML = "";

    notes.forEach((note) => {
        notesDiv.innerHTML += `
            <div>
                <h3>${note.order_number}</h3>

                <strong>
                    ${note.author}
                </strong>

                <p>
                    ${note.message}
                </p>

                <hr>
            </div>
        `;
    });
}

document
    .getElementById("note-form")
    .addEventListener("submit", async function (event) {
        event.preventDefault();

        await fetch("/api/notes", {
            method: "POST",

            headers: {
                "Content-Type": "application/json",
            },

            body: JSON.stringify({
                order_number: document.getElementById("order_number").value,

                author: document.getElementById("author").value,

                message: document.getElementById("message").value,
            }),
        });

        this.reset();

        loadNotes();
    });

loadNotes();
