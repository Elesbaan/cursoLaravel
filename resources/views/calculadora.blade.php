<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Laravel</title>
</head>
<body>
    <h1>Calculadora Básica</h1>

    <form method="POST" action="{{ route('calculadora.calcular') }}">
        @csrf
        <label>Número 1:</label>
        <input type="number" name="numero1" value="{{ old('numero1', $numero1 ?? '') }}" required><br><br>

        <label>Número 2:</label>
        <input type="number" name="numero2" value="{{ old('numero2', $numero2 ?? '') }}" required><br><br>

        <label>Operación:</label>
        <select name="operacion" required>
            <option value="sumar" {{ (isset($operacion) && $operacion == 'sumar') ? 'selected' : '' }}>Sumar</option>
            <option value="restar" {{ (isset($operacion) && $operacion == 'restar') ? 'selected' : '' }}>Restar</option>
            <option value="multiplicar" {{ (isset($operacion) && $operacion == 'multiplicar') ? 'selected' : '' }}>Multiplicar</option>
            <option value="dividir" {{ (isset($operacion) && $operacion == 'dividir') ? 'selected' : '' }}>Dividir</option>
        </select><br><br>

        <button type="submit">Calcular</button>
    </form>

    @if (isset($resultado))
        <h2>Resultado: {{ $resultado }}</h2>
    @endif
</body>
</html>