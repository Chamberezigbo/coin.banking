// what should we do when scrolling occurs
function runOnScroll(element) {
	// not the most exciting thing, but a thing nonetheless
	const visitorNum = parseFloat(
		document.querySelector("#visitors").innerHTML.replace(/,/g, "")
	);
	const winnerNum = parseFloat(
		document.querySelector("#winners").innerHTML.replace(/,/g, "")
	);
	const userNum = parseFloat(
		document.querySelector("#users").innerHTML.replace(/,/g, "")
	);

	let visitorsCounter = visitorNum;
	let winnerCounter = winnerNum;
	let userCounter = userNum;

	setInterval(() => {
		visitorsCounter++;
		winnerCounter--;
		userCounter++;
		document.querySelector("#visitors").innerHTML =
			visitorsCounter.toLocaleString();
		document.querySelector("#winners").innerHTML =
			winnerCounter.toLocaleString();
		document.querySelector("#users").innerHTML =
			userCounter.toLocaleString();
	}, 2000);
}

const elements = document.querySelectorAll("body");

elements.forEach((element) => {
	window.addEventListener("scroll", () => runOnScroll(element), {
		passive: true,
	});
});
