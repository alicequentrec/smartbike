<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smartbike</title>
</head>
<style>   
.annonces {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 20px;
    margin-top: 20px;
}
.annonce {
    border: 1px solid #ddd;
    padding: 10px;
    background-color: white;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
}
.annonce img {
    max-width: 100%;
    height: auto;
    border-radius: 5px;
    aspect-ratio: 16 / 9; 
}
.annonce h2 {
    font-size: 24px;
    margin-bottom: 10px;
}
.annonce p {
    font-size: 16px;
    margin-bottom: 10px;
    color: black;
}

.annonce .prix {
    font-size: 30px;
    font-weight: bold;
    color: black;
}
.annonces-container {
    gap: 20px;
    margin-top: 20px;
    margin-bottom: 30px;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    padding: 20px;
    
}
#btncommander {
    
    background-color: green; 
    color: white; 
    border: none; 
    padding: 10px 20px;
    text-align: center; 
    text-decoration: none; 
    display: inline-block; 
    font-size: 16px;
    border-radius: 5px; 
}

#btncommander:hover {
   
    background-color: blue; 
}
#btninfo {
   
    background-color: green; 
    color: white; 
    border: none;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none; 
    display: inline-block; 
    font-size: 16px;
    border-radius: 5px;
}
#btninfo:hover {

    background-color: red; 
}
 </style>
<body>
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <img  href="index.php" src="controller/img/logo.png " width="100" height="50">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?page=accueil">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=velos">Velos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=contact">Contacts</a>
        </li>
        
      
    </div>
  </div>
</nav>


