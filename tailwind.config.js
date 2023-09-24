/** @type {import('tailwindcss').Config} */
export default {
	content: [],
	theme: {
		extend: {},
	},
	plugins: [],
}

/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		"./resources/views/**/*.blade.php", // Include all Blade templates
		"./resources/css/**/*.css", // Include CSS files
		"./resources/js/**/*.js", // Include JavaScript files
	],
	theme: {
		extend: {},
	},
	plugins: [],
};
