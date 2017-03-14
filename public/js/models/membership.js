"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var MembershipState = (function () {
    function MembershipState(id, name, borrowDays) {
        this.Id = id;
        this.Name = name;
        this.BorrowDays = borrowDays;
    }
    MembershipState.prototype.getById = function (id) {
        return $.post({
            url: '/api/Membership/GetById',
            data: 'id=' + id
        });
    };
    Object.defineProperty(MembershipState.prototype, "Id", {
        get: function () {
            return this.id;
        },
        set: function (value) {
            this.Id = value;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(MembershipState.prototype, "Name", {
        get: function () {
            return this.name;
        },
        set: function (value) {
            this.name = value;
        },
        enumerable: true,
        configurable: true
    });
    Object.defineProperty(MembershipState.prototype, "BorrowDays", {
        get: function () {
            return this.borrowDays;
        },
        set: function (value) {
            this.borrowDays = value;
        },
        enumerable: true,
        configurable: true
    });
    return MembershipState;
}());
exports.MembershipState = MembershipState;
