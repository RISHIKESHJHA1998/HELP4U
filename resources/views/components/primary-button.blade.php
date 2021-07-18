<button {{ $attributes->merge(['type' => 'submit', 'class' => 'hover-item btn btn-primary']) }}>
    {{ $slot }}
</button>

<style>
    .hover-item {
	    background-color: #053742;
        border: none;
    }
    
    .hover-item:hover {
	    background-color: #f0ad4e;
    }
</style>
 