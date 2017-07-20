const exec = require( 'child_process' ).exec

run( 'script', 'nodemon -w js -e js --exec browserify js -o ./bitlox.js --debug' )
run( 'style', 'nodemon -w less -e less --exec lessc less/_main.less ./bitlox.css' )

function run( id, cmd ) {
	const proc = exec( cmd )
	proc.stdout.on( 'data', (data) => {
		console.log( id + '-log:', data )
	})
	proc.stderr.on( 'data', (data) => {
		console.log( id + '-error:', data )
	})
}
