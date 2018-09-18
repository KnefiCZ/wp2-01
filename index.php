
<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>kok</title>
  </head>
  <body>


      <form action="submit.php" method="post">
        <label for="spz">SPZ</label>
          <input id="spz" type="text" name="spz" placeholder="AAA AAAA">
         <label for="auta">Auto</label>
            <select id="auta"  name="auta" >
                  <option value="ford">Ford</option>
                  <option value="skoda">Škoda</option>
                  <option value="jeep">Jeep</option>
                  <option value="gaz">Gaz</option>
                  <option value="uaz">Uaz</option>
                  <option value="fiat">Fiat</option>
                </select>

            <input type="submit" name="submit" value="Odeslat">
      </form>
    </body>
  </html>
