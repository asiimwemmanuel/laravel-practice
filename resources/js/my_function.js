// Select a random ID in the table
function getRandomAnime(AnimeID) {
	const randomNumber = Math.floor(Math.random() * AnimeID) + 1;
	return randomNumber;
}
