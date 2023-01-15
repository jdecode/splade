@props(['as' => 'Link'])

<{{ $as }} {{ $attributes->class('block px-4 py-2 text-sm leading-5 text-gray-400 dark:bg-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out') }}>{{ $slot }}</{{ $as }}>
