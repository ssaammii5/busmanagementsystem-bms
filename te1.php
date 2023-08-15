<!DOCTYPE html>
<html>
<head>
    <title>Selected Option Value</title>
    <script>
        function handleSelection() {
            var selectElement = document.getElementById("previousInput");
            var selectedValue = selectElement.value;
            document.getElementById("selectedValueInput").value = selectedValue;
        }
    </script>
</head>
<body>
    <label for="previousInput">Select an option:</label>
    <select id="previousInput" name="previousInput">
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="option3">Option 3</option>
        <option value="option4">Option 4</option>
        <option value="option5">Option 5</option>
    </select>

    <button onclick="handleSelection()">Show Selected Value</button>

    <input type="text" id="selectedValueInput" name="selectedValue" readonly>
</body>
</html>
