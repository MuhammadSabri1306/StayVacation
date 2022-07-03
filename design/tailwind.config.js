const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
	content: ["./src/**/*.{html,js}"],
	theme: {
		extend: {
			colors: {
				"light": "#e9e7e7",
				"semilight": "#c4c4c4",
				"dark": "#232323"
			}
		},
		fontFamily: {
			"serif": ["Merriweather", ...defaultTheme.fontFamily.serif],
			"sans": ["Lato", ...defaultTheme.fontFamily.sans],
			"display": ["Merriweather", ...defaultTheme.fontFamily.serif],
			"body": ["Lato", ...defaultTheme.fontFamily.sans],
		},
		container: {
			center: true
		}
	},
	plugins: [],
}
