
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Generatore di password casuali
    </h1>

    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-body">

                    <h2 class="text-center mb-4">
                        Generatore Password
                    </h2>

                    <form action="password.php" method="GET">

                        <div class="mb-3">
                            <label for="lunghezza" class="form-label">
                                Lunghezza password
                            </label>

                            <input
                                type="number"
                                class="form-control"
                                name="lunghezza"
                                id="lunghezza"
                                min="1"
                                max="100"
                                placeholder="Inserisci la lunghezza"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">
                                Caratteri consentiti
                            </label>

                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    name="options[]"
                                    value="lowercase"
                                    id="lowercase">

                                <label class="form-check-label" for="lowercase">
                                    Lettere minuscole (a-z)
                                </label>
                            </div>

                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    name="options[]"
                                    value="uppercase"
                                    id="uppercase"
                                    >

                                <label class="form-check-label" for="uppercase">
                                    Lettere maiuscole (A-Z)
                                </label>
                            </div>

                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    name="options[]"
                                    value="numbers"
                                    id="numbers"
                                    >

                                <label class="form-check-label" for="numbers">
                                    Numeri (0-9)
                                </label>
                            </div>

                            <div class="form-check">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    name="options[]"
                                    value="symbols"
                                    id="symbols"
                                    >

                                <label class="form-check-label" for="symbols">
                                    Simboli (!@#$...)
                                </label>
                            </div>
                        </div>

                        <button
                            type="submit"
                            class="btn btn-primary w-100">
                            Genera Password
                        </button>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

    
    
</body>
</html>