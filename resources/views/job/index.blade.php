<div>
  <h1>job board</h1>
  @foreach ($jobs as $job)
    <div>{{ $job['name'] }}:{{ $job['salary'] }}</div>
  @endforeach
</div>