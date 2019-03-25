<!doctype html>
<html lang="PT-br">
 
    <head>
        <meta charset="UTF-8">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>
             @yield('titulo')
        </title>
    </head>
    
    <body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                      <a class="navbar-brand" href="/">Turmaker</a>
                      
                      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                          <a class="nav-link" href="/">Inicio</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="professores">Professores</a>
                        </li>
                        
                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                      </form>
                    </div>
                  </nav>