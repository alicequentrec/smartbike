<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  
  <style>
  body {
  font-family: 'Arial', sans-serif;
  margin: 0;
  padding: 0;
  background-color: lightblue;
}

.container {
  max-width: 800px;
  margin: 50px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  color: #333;
}

.contact-form {
  margin-top: 20px;
}

label {
  display: block;
  margin-bottom: 8px;
  color: #333;
}

input,
textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button {
  background-color: #3498db;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #2980b9;
}

.entreprise-info {
  margin-top: 30px;
}

.google-maps {
  margin-top: 30px;
}
</style>
  <link rel="stylesheet" href="contact.php">
</head>
<body>
  <div class="container">
    <h1>Contactez-nous</h1>
    
    <form action="process_contact.php" method="post" class="contact-form">
      <label for="nom">Nom :</label>
      <input type="text" id="nom" name="nom" placeholder="Votre nom" required>

      <label for="prenom">Prénom :</label>
      <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" required>

      <label for="email">Email :</label>
      <input type="email" id="email" name="email" placeholder="Votre email" required>

      <label for="message">Message :</label>
      <textarea id="message" name="message" rows="4" placeholder="Saisissez votre message ici..." required></textarea>

      <button type="submit">Envoyer</button>
    </form>

    <div class="entreprise-info">
      <h2>Coordonnées de Smartbike</h2>
      <p>Adresse : 30 avenue République, 94815 Villejuif</p>
      <p>Téléphone : +33 66 78 94 23</p>
      <p>Email : contact@smartbike.fr</p>
    </div>
    <div class="google-maps">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.6723404326475!2d2.356923315674937!3d48.80687477928091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67206c2811905%3A0xd997f5f0c3455174!2sEFREI%20-%20%C3%89cole%20d&#39;ing%C3%A9nieurs!5e0!3m2!1sen!2sfr!4v1639829842562!5m2!1sen!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>

</body>
</html>
