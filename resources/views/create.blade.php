<h1>Voeg hier een nieuwe auto toe</h1>
<form action="{{ route('cars.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="autonummer">Auto nummer</label>
        <input type="text" id="autonummer" name="autonummer" placeholder="autonummer" required>
    </div>
    <div class="form-group">
        <label for="automerk">Auto merk</label>
        <input type="text" id="automerk" name="automerk" placeholder="automerk" required>
    </div>
    <div class="form-group">
        <label for="autotype">Auto type</label>
        <input type="text" id="autotype" name="autotype" placeholder="Auto model" required>
    </div>
    <div class="form-group">
        <label for="autobouwjaar">Auto bouwjaar</label>
        <input type="text" id="autobouwjaar" name="autobouwjaar" placeholder="Auto bouwjaar" required>
    </div>
    <div>
        <button type="submit">Opslaan</button>
    </div>
</form>
