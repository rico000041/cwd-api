@extends('nav.header')
	<h1>@yield('header','Home')</h1>

	<ul>
		<a href="/"><li>Home</li></a>
		<a href="/about"><li>About</li></a>
		<a href="/contact"><li>Contact</li></a>

	</ul>
	@yield('content')