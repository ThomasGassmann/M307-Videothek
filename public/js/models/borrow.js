"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var VideoBorrow = (function () {
    function VideoBorrow(video, customer, borrowDate) {
        this.Video = video;
        this.Customer = customer;
        this.BorrowDate = borrowDate;
    }
    Object.defineProperty(VideoBorrow.prototype, "Video", {
        get: function () {
            return this.video;
        },
        set: function (value) {
            this.video = value;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(VideoBorrow.prototype, "Customer", {
        get: function () {
            return this.customer;
        },
        set: function (value) {
            this.customer = value;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(VideoBorrow.prototype, "BorrowDate", {
        get: function () {
            return this.borrowDate;
        },
        set: function (value) {
            this.borrowDate = value;
        },
        enumerable: true,
        configurable: true
    });
    return VideoBorrow;
}());
exports.VideoBorrow = VideoBorrow;
