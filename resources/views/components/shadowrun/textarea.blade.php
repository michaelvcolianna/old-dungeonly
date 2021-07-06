@props(['disabled' => false, 'rows' => 2])

<textarea {{ $disabled ? 'disabled': '' }} rows="{{ $rows }}" {!! $attributes->merge(['class' => 'resize-y border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm']) !!}></textarea>
