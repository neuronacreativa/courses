package nc.courses.solid.s.booksample.firstapproach;

final class Book
{
    public String getTitle()
    {
        return "A great book";
    }
    public String getAuthor()
    {
        return "John Doe";
    }
    public void printCurrentPage()
    {
        System.out.println("current page content");
    }
}