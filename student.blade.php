<section>
	<h1>student data</h1>
	@if(count($data)>0)
		<table>
			<thead>
				<tr>
					
					<th>sno</th>
					<th>sname</th>
					<th>marks</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $student)
                   <tr>
                   	
                   	<td>{{$student->sno}}</td>
                   	<td>{{$student->sname}}</td>
                   	<td>{{$student->marks}}</td>
                   </tr>
				@endforeach
			</tbody>
		</table>
	
	@else
	<p>nothing to dispaly</p>
	@endif
</section>