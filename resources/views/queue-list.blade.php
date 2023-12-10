@extends('layouts.app')

@section('content')
<link href="Front/stilus.css" rel="stylesheet">
<div div class="bg-image" style="background-image: url(asset/BG2.png); height: 150vh">
<div class="container-fluid p-0 bg-light bg-gradient">
	<table>
		<thead>
			<tr>
				<th>no</th>
				<th>Device</th>
				<th>Waktu</th>
        <th>Status</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>PS5 1</td>
				<td>08:15 - 09:15</td>
        <td>Dipakai</td>
			</tr>
			<tr>
				<td>2</td>
				<td>PS5 2</td>
				<td>09:45 - 10:45</td>
        <td>Dipakai</td>
			</tr>
			<tr>
				<td>3</td>
				<td>XBOX 2</td>
				<td>10:15 - 11:15</td>
        <td>Dipakai</td>
			</tr>
			<tr>
				<td>4</td>
				<td>PS 5 2</td>
				<td>11:45 - 12:45</td>
        <td>Dipakai</td>
			</tr>
			<tr>
				<td>5</td>
				<td>Komputer</td>
				<td>13:15 - 14:15</td>
        <td>Dipakai</td>
			</tr>
      <tr>
				<td>6</td>
				<td>PS5 1</td>
				<td>14:45 - 15:45</td>
        <td>Dipakai</td>
			</tr>
      <tr>
				<td>7</td>
				<td>XBOX 1</td>
				<td>15:15 - 16:15</td>
        <td>Dipakai</td>
			</tr>
      <tr>
				<td>8</td>
				<td>Pump Dance</td>
				<td>16:45 - 17:45</td>
        <td>Dipakai</td>
			</tr>
		</tbody>
	</table>
</div>
</div>
<style>
    #carouselControl {
        max-width: 100%;
        margin: auto;
        height: 100%;
    }
</style>
@endsection