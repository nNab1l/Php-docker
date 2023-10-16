<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>API example</title>
</head>
<body>


<header>
    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
            <a href="/" class="navbar-brand d-flex align-items-center">
                <strong>API voorbeeld</strong>
            </a>
        </div>
    </div>
</header>

<main role="main">
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Dynamische content</h1>
            <p class="lead text-muted">Op deze pagina komt straks dynamische content.</p>
            <p>
                <a href="#" class="btn btn-primary my-2">Get API data, succes</a><br>
                <a href="#" class="btn btn-secondary my-2">Get API data, failed</a><br>
                <a href="#" class="btn btn-secondary my-2">Get API data, unauthorized</a>
            </p>
        </div>
    </section>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-4 box-shadow">

                <div class="api-result border border-1 py-2 px-5">
                    Hier komt data
                </div>
            </div>
        </div>
    </div>
</div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>