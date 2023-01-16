@props(['as' => 'Link'])

<{{ $as }} {{ $attributes->class('font-semibold block px-4 py-2 text-sm leading-5 text-skin-bade bg-skin-fill focus:outline-none transition duration-150 ease-in-out') }}>{{ $slot }}</{{ $as }}>
