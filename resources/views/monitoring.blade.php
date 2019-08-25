<!DOCTYPE html>
<html>
<head>
	<title>Resultados</title>
</head>
<body>


@foreach( $testMonitor as $testMonitorItem )

<label>
	Temperatura
<li>{{ $testMonitorItem->temperature }}</li>
</label>


<label>
	PH
	<li> {{ $testMonitorItem->ph }} </li>
</label>
<br>
@endforeach




</body>
</html>