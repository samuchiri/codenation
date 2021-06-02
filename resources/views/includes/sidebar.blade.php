<ul>
	@can('View Student')
	<li><a href="/student"><i class="fa fa-users"></i> STUDENT</a></li>
	@endcan
	@can('View Module')
	<li><a href="/module">MODULE</a></li>
    @endcan
   @can('View Resource')
   <li><a href="/resource">RESOURCE</li>
    @endcan
    <li><a href="/user">RESOURCE</li>
	
</ul>