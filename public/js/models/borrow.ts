import { IEntity } from "./entity";
import { MembershipState } from "./membership";
import { Video } from "./video";
import { Customer } from "./customer";

export class VideoBorrow {
    private video: Video;
    private customer: Customer;
    private borrowDate: Date;

    public constructor(video: Video, customer: Customer, borrowDate: Date) {
        this.Video = video;
        this.Customer = customer;
        this.BorrowDate = borrowDate;
    }

    public get Video(): Video {
        return this.video;
    }

    public set Video(value: Video) {
        this.video = value;
    }
    
    public get Customer(): Customer {
        return this.customer;
    }

    public set Customer(value: Customer) {
        this.customer = value;
    }

    public get BorrowDate(): Date {
        return this.borrowDate;
    }

    public set BorrowDate(value: Date) {
        this.borrowDate = value;
    }
}