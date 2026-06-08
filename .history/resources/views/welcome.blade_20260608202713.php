<!DOCTYPE html>
<html>
<head>
    <title>Order Note Board</title>
</head>
<body>

    <h1>Order Note Board</h1>

    <form id="note-form">

        <input
            type="text"
            id="order_number"
            placeholder="Order Number"
            required
        >

        <input
            type="text"
            id="author"
            placeholder="Author"
            required
        >

        <textarea
            id="message"
            placeholder="Message"
            required
        ></textarea>

        <button type="submit">
            Add Note
        </button>

    </form>

    <hr>

    <div id="notes"></div>

    <script src="/js/app.js"></script>

</body>
</html>