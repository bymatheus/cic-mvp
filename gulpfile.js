const { series, parallel, watch } = require("gulp");

const gulp = require("gulp"),
    imagemin = require("gulp-imagemin"),
    clean = require("gulp-clean"),
    concat = require("gulp-concat"),
    uglify = require("gulp-uglify"),
    sass = require("gulp-sass"),
    cleanCSS = require("gulp-clean-css"),
    rename = require("gulp-rename"),
    sourcemaps = require("gulp-sourcemaps");
sass.compiler = require("sass");

function createDist() {
    return gulp
        .src("resources/images/**/*")
        .pipe(gulp.dest("public/dist/images"));
}

function minifyImage() {
    return gulp
        .src("public/dist/images/**/*")
        .pipe(imagemin())
        .pipe(gulp.dest("public/dist/images"));
}

function deleteDist() {
    return gulp.src("public/dist").pipe(clean());
}

function buildJs() {
    return gulp
        .src([
            "node_modules/bootstrap/dist/js/bootstrap.bundle.js",
            "resources/js/app.js"
        ])
        .pipe(sourcemaps.init())
        .pipe(concat("all.min.js"))
        .pipe(uglify())
        .pipe(sourcemaps.write("./"))
        .pipe(gulp.dest("public/dist/js"));
}

function buildCss() {
  return gulp
    .src("resources/scss/style.scss")
    .pipe(sourcemaps.init())
    .pipe(sass().on("error", sass.logError))
    .pipe(cleanCSS())
    .pipe(rename("bundle.min.css"))
    .pipe(sourcemaps.write("./"))
    .pipe(gulp.dest("public/dist/css"));
}

exports.startProject = createDist;

exports.rollbackProject = deleteDist;

exports.scssRoutine = parallel(buildCss);

exports.compileRoutine = function () {
    watch(
        "resources/scss/**/*.scss",
        parallel(buildCss)
    );
    watch(
        "resources/js/**/*.js",
        parallel(
            buildJs
        )
    );
};

exports.defaultRoutine = series(
    deleteDist,
    createDist,
    parallel(
        minifyImage,
        buildJs,
        buildCss
    )
);
