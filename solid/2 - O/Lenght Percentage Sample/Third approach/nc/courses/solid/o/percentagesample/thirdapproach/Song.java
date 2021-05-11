package nc.courses.solid.o.percentagesample.thirdapproach;

final class Song extends Measurable {
    private Double totalLength;
    private Double sentLength;

    @Override
    public Double getTotalLength() {
        return totalLength;
    }

    @Override
    public Double getSentLength() {
        return sentLength;
    }
}