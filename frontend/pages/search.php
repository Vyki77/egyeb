<main id="search">
    <h2>Keresés</h2>
    
    <p>
        Dátum:
        <input type="number" name="month" id="month" min="1" max="12" placeholder="Hónap" required>
        <input type="number" name="day" id="day" min="1" max="31" placeholder="Nap" required>
        <input type="button" value="Dátumot keresek" onclick="getByDate()">
    </p>
    <p>
        Név:
        <input type="text" name="name" id="name" placeholder="Név" required>
        <input type="button" value="Nevet keresek" onclick="getByName()">
    </p>

    <p id="result"></p>
</main>