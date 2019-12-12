<?php
//create formulier
?>
            <form action="index.php" method="POST">
                <div class="form-group">
                    <label for="personeelsnummer">personeelsnummer</label>
                    <input type="text" name="personeelsnummer" class="form-control" placeholder="personeelsnummer">
                </div>
                <!-- <div class="form-group">
                    <label for="achternaam">Afdeling</label>
                    <select multiple class="form-control" name="afdeling">
                        <option value="24">Afdeling 1</option>
                        <option value="23">Afdeling 2</option>
                        <option value="22">Afdeling 3</option>
                        <option value="20">Overig</option>
                    </select>
                </div> -->
                <div class="form-group">
                    <label for="bijnaam">Hoe lang in dienst</label>
                    <input type="text" name="lengte_dienst" class="form-control" placeholder="Lengte in dienst">
                </div>
                <div class="form-group">
                    <label for="bijnaam">leeftijd</label>
                    <input type="text" name="leeftijd" class="form-control" placeholder="Leeftijd">
                </div>


                <button type="submit" class="btn btn-primary" value="Bereken de vakantiedagen">Bereken de vakantiedagen</button>
            </form>

