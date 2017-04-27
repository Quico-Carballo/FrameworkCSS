<checkbox>
  <ul>
    <li each={ items } class={ completed: done }>
      <input type="checkbox" checked={ done }> { title }
    </li>
  </ul>

  this.items = [
    { title: 'First item', done: true },
    { title: 'Second item' },
    { title: 'Third item' }
  ]
</checkbox>

<card>
	<img src="{opts.thumbnail}">
	<h1>{opts.title}</h1>
	<nav><a each={a in opts.link} href="{a.href}">{a.link}</a></nav>
	<p>{opts.content}</p>


	<style>
		card{
			display:flex;
			flex-direction:column;
			border:1px solid silver;
			overflow:hidden;
		}
		img{
			max-width:100%;
		}
		h1{
			color:white;
			text-shadow: 0 0 .1em #000;
			text-align:center;
			line-height:1.5em;
			margin:-1.5em 0 0;
			padding:0 .5em;
		}
		nav{
			display:flex;
		}
		nav a{
			color: black;
			linear-gradient: (rgba(white,.1),rgba(black,.1));
			flex-grow:1;
			line-height:3em;
			text-align:center;
			text-decoration:none;
		}
		p{
			margin:0;
			padding:1em;
		}
	</style>
</card>