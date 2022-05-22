<form action="basic/search.php">
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="search" placeholder="Search Buku"
        value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>">
        <button type="submit" class="btn btn-primary">Search</button>
    </div>
</form>