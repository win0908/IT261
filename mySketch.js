

let colors = ['#DE183C', '#F2B541', '#0C79BB', '#ec4e20', '#067bc2', '#00916e', '#ff9f1c', '#a4459f', '#f654a9'];
let SEED = Math.floor(Math.random() * 1000);

function setup() {
	let canvas = createCanvas(900, 900);
	canvas.parent('p5');
}

function draw() {
	randomSeed(SEED)
	background('#ffffff');
	let c = 21;
	let w = width / c;
	strokeWeight(0);
	translate(width / 2, height / 2);
	scale(0.8);
	translate(-width / 2, -height / 2);
	for (let i = 0; i < c; i++) {
		for (let j = 0; j < c; j++) {
			let x = i * w + w / 2;
			let y = j * w + w / 2;

			if ((i + j) % 2 == 0) {
				form(x, y, w * 0.9);
			}
		}
	}
}

function form(x, y, w) {

	let a = sin(frameCount * 0.005 + (y * 0.01) + (x * 0.001)) * 10;
	let r = (((cos(((frameCount / 60) * PI * 1.25) + (PI / 2) + ((x+y) * 0.002))+1)/2) ** 3) * w * 0.25;
	let offx = r * cos(a);
	let offy = r * sin(a);
	let col1 = col2 = col3 = '🍝';
	while (col1 == col2 || col2 == col3 || col3 == col1) {
		col1 = random(colors);
		col2 = random(colors);
		col3 = random(colors);
	}


	push();
	translate(x, y);
	fill(col1);
	circle(offx, offy, w);
	fill(col2);
	circle(0, 0, w);
	drawingContext.clip();
	fill('#000000');
	circle(offx, offy, w);
	pop();
}




