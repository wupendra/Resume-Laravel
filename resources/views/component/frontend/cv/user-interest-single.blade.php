<div class="row interest-ele">
    <div class="col-md-8">
        <h4>{{ $interest->name }}</h4>
        <div class="ele-keywords ">
            @forelse($interest->keywords as $key)
            <span class="badge">{{ $key }}</span>
			@empty
			@endforelse
        </div>
    </div>
    <div class="col-md-4 cv-actions">
        <button class="interest-edit" ref="interest-ref{{ $interest->id }}"><i class="fa fa-edit"></i></button>
        <button  class="interest-delete" ref="interest-ref{{ $interest->id }}"><i class="fa fa-trash-o"></i></button>
    </div>
</div>