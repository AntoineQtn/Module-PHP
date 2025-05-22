<h3>Your Cart</h3>
<form action="cart.php" method="post">
    <label for="product">Choose your product:</label>
    <select id="product" name="product">
        <option value="">-- Sélection --</option>
        <option value="iPhone">iPhone</option>
        <option value="iPad">iPad</option>
        <option value="iMac">iMac</option>
    </select>

    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" min="1">

    <input type="submit" value="Commander">
</form>

