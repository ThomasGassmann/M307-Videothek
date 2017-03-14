"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var Video = (function () {
    function Video(id, title, length, releaseYear, isBorrowed) {
        if (length === void 0) { length = null; }
        if (releaseYear === void 0) { releaseYear = null; }
        if (isBorrowed === void 0) { isBorrowed = null; }
        this.length = 0;
        this.isBorrowed = false;
        this.Id = id;
        this.Title = title;
        this.Length = length === null ? 0 : length;
        this.ReleaseYear = releaseYear === null ? new Date("January 1, 1970 00:00:00") : releaseYear;
        this.IsBorrowed = isBorrowed === null ? false : isBorrowed;
    }
    Object.defineProperty(Video.prototype, "Id", {
        get: function () {
            return this.id;
        },
        set: function (value) {
            this.Id = value;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(Video.prototype, "Title", {
        get: function () {
            return this.title;
        },
        set: function (value) {
            this.title = value;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(Video.prototype, "Length", {
        get: function () {
            return this.length;
        },
        set: function (value) {
            this.length = value;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(Video.prototype, "ReleaseYear", {
        get: function () {
            return this.releaseYear;
        },
        set: function (value) {
            this.releaseYear = value;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(Video.prototype, "IsBorrowed", {
        get: function () {
            return this.isBorrowed;
        },
        set: function (value) {
            this.isBorrowed = value;
        },
        enumerable: true,
        configurable: true
    });
    return Video;
}());
exports.Video = Video;
