const preset = require('./vendor/filament/filament/tailwind.config.preset')

module.exports = {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        extend: {
            spacing: {
                '4.5': '1.125rem',
            }
        }
    },
    corePlugins: {
        preflight: false,
    }
}
