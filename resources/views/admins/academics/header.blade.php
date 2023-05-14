 <div class="col-md-12 col-lg-12">
	<div class="card">
		<div class="card-body">						
			<div class="vtabs customvtab">
				<ul class="nav nav-tabs tabs-horizontal" role="tablist">
					<li class="nav-item"> <a class="nav-link active" href="{{ route('levels.index') }}" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down">{{ __('levels') }}</span> </a> </li>
					<li class="nav-item"> <a class="nav-link" href="{{ route('grades.index') }}" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down">{{ __('Grades') }}</span></a> </li>
					<li class="nav-item"> <a class="nav-link" href="{{ route('classes.index') }}" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down">{{ __('Classes') }}</span></a> </li>
					<li class="nav-item"> <a class="nav-link" href="{{ route('shifts.index') }}" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down">{{ __('shifts') }}</span></a> </li>
					<li class="nav-item"> <a class="nav-link" href="{{ route('subjects.index') }}" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down">{{ __('subjects') }}</span></a> </li>
					<li class="nav-item"> <a class="nav-link" href="{{ route('sections.index') }}" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down">{{ __('Sections') }}</span></a> </li>
					<li class="nav-item"> <a class="nav-link" href="{{ route('times.index') }}" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down">{{ __('Time Slots') }}</span></a> </li>
					<li class="nav-item"> <a class="nav-link" href="{{ route('days.index') }}" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down">{{ __('Days') }}</span></a> </li>
					<li class="nav-item"> <a class="nav-link" href="{{ route('sessions.index') }}" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down">{{ __('Sessions') }}</span></a> </li>
				</ul>
			</div>
		</div>
	</div>
</div>
